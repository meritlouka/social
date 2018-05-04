@extends('post::layouts.master')

@section('section')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('user.post') !!}
    </p>
   
    <!-- Create Task Form... -->

    <!-- Current Tasks -->
    @if (count($posts) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Post</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $post->title }}</div>
                                </td>
								<!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $post->content }}</div>
                                </td>
                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection

