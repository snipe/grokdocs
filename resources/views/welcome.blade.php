@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

                <h1>
                    <div id="app">
                        @{{ message }}
                    </div>

                    <form>
                        <span class="error" v-show="!message">
                            You must enter text
                        </span>

                        <textarea v-model="message"></textarea>

                        <button type="submit">submit</button>

                    </form>

                    <pre> @{{ $data }}</pre>
                </h1>
        </div>
    </div>

@stop
