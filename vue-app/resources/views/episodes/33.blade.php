@extends('welcome')

@section('content')
<menu-list :items="['one', 'two', 'three']">
    <template slot="menu-item" slot-scope="{ item }">
        <div>
            <em v-text="item"></em>
        </div>
    </template>
</menu-list>
@endsection
