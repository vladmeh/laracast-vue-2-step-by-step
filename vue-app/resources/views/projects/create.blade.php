@extends('welcome')

@section('content')
    @include('projects.list')

    <form method="post" action="/projects" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">
        <div class="field">
            <div class="control">
                <label for="name" class="label">Project Name:</label>
                <input type="text" id="name" name="name" class="input" v-model="name">
                <span class="help is-danger" v-if="errors.has('name')" v-text="errors.get('name')"></span>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <label for="description" class="label">Project Description:</label>
                <input type="text" id="description" name="description" class="input" v-model="description"
                       @keydown="errors.clear('description')">
                <span class="help is-danger" v-if="errors.has('description')" v-text="errors.get('description')"></span>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-primary" :disabled="errors.any()">Create</button>
            </div>
        </div>
    </form>
@endsection