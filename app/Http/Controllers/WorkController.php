<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Work;
use Illuminate\Support\Str;
use App\Http\Requests\StoreWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Tag;
use Parsedown;

class WorkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth') ; 
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Work::query()->orderBy('created_at', 'desc')->with('tags')->paginate(10) ; 

        return view('dashboard.work.index', [
            'works' => $works
        ]) ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $work = new Work() ; 

        $work->fill([
            'title' => 'Titre de la rea',
            'problematic' => 'Prolematique',
            'link' => 'le lien',
            'description' => 'description'
        ]) ; 

        return view('work.form', [
            'work' => $work
        ]) ; 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkRequest $request)
    {
        $work = new Work() ; 

        $work->title = $request->validated('title') ; 
        $work->slug = Str::slug($request->validated('title')) ; 
        $work->problematic = $request->validated('problematic') ; 
        $work->link = $request->validated('link') ; 
        $work->description = $request->validated('description') ; 

        $work->save() ; 

        $tasks = explode(',', $request->validated('tasks')) ; 

        $task_ids = [] ; 

        foreach ($tasks as $inputTask) {
            
            $inputTask = trim($inputTask) ; 

            $task = Task::firstOrCreate([
                'slug' => $inputTask
            ], [
                'name' => $inputTask,
                'slug' => Str::slug($inputTask)
            ]) ; 

            $task_ids[] = $task->id ; 

        }

        $work->tasks()->sync($task_ids) ; 


        $tags = explode(',', $request->validated('tags')) ; 

        $tag_ids = [] ; 

        foreach ($tags as $inputTag) {
            
            $inputTag = trim($inputTag) ; 

            $tag = Tag::firstOrCreate([
                'slug' => $inputTag
            ], [
                'name' => $inputTag,
                'slug' => Str::slug($inputTag)
            ]) ; 

            $tag_ids[] = $tag->id ; 

        }

        $work->tags()->sync($tag_ids) ; 

        return to_route('works.show', $work)->with('success', 'Rea bien ajouter') ; 
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {

        $works = Work::query()->latest()->take(4)->get() ; 

        $parsedown = new Parsedown() ; 
        $description = $parsedown->text($work->description)  ; 

        return view('work.show', [
            'work' => $work,
            'description' => $description,
            'works' => $works
        ]) ; 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {

        $taskss = [] ; 
        $tagss = [] ; 

        foreach ($work->tasks as $task) {
            $taskss[] = $task->name ; 
        }

        $tasks = implode(',', $taskss) ; 

        foreach ($work->tags as $tag) {
            $tagss[] = $tag->name ; 
        }

        $tags = implode(',', $tagss) ; 


        return view('work.form', [
            'work' => $work,
            'tasks' =>$tasks,
            'tags' => $tags
        ]) ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkRequest $request, Work $work)
    {
        $work->title = $request->validated('title') ; 
        $work->slug = Str::slug($request->validated('title')) ; 
        $work->problematic = $request->validated('problematic') ; 
        $work->link = $request->validated('link') ; 
        $work->description = $request->validated('description') ; 

        $work->save() ; 

        $tasks = explode(',', $request->validated('tasks')) ; 

        $task_ids = [] ; 

        foreach ($tasks as $inputTask) {
            
            $inputTask = trim($inputTask) ; 

            $task = Task::firstOrCreate([
                'slug' => $inputTask
            ], [
                'name' => $inputTask,
                'slug' => Str::slug($inputTask)
            ]) ; 

            $task_ids[] = $task->id ; 

        }

        $work->tasks()->sync($task_ids) ; 


        $tags = explode(',', $request->validated('tags')) ; 

        $tag_ids = [] ; 

        foreach ($tags as $inputTag) {
            
            $inputTag = trim($inputTag) ; 

            $tag = Tag::firstOrCreate([
                'slug' => $inputTag
            ], [
                'name' => $inputTag,
                'slug' => Str::slug($inputTag)
            ]) ; 

            $tag_ids[] = $tag->id ; 

        }

        $work->tags()->sync($tag_ids) ; 


        return to_route('works.show', $work)->with('success', 'Rea bien Modif') ; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $work->delete() ; 

        return to_route('works.index')->with('success', 'Rea Sup') ; 
    }
}
