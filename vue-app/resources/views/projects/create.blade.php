@extends('welcome')

@section('content')
    @include('projects.list')

    <form method="post" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
        <div class="field">
            <div class="control">
                <label for="name" class="label">Project Name:</label>
                <input type="text" id="name" name="name" class="input" v-model="form.name">
                <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <label for="description" class="label">Project Description:</label>
                <input type="text" id="description" name="description" class="input" v-model="form.description">
                <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-primary" :disabled="form.errors.any()">Create</button>
            </div>
        </div>
    </form>
@endsection