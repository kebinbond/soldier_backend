@extends('layouts.app', ['page' => __('Course'), 'pageSlug' => 'course'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success" id="success-message">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header">
                    <h3 class="title">COURSE MANAGEMENT</h5>
                </div>
                <div style="display: flex">
                    <div class="col-md-5" style="border-right: solid; border-right-width: 1px;">
                        <div class="row" style="padding: 15px; align-items: baseline; justify-content: space-between;">
                            <h4>Course List</h4>
                            <button class="btn btn-info animation-on-hover btn-sm" type="button" data-toggle="modal"
                                data-target="#addCourse">Add</button>
                        </div>
                        <div>
                            @foreach ($courses as $item)
                                <button class="btn btn-default col-md-12 course" style="white-space: inherit;">
                                    <div class="row">
                                        <h4 class="card-title">{{ $item->title }}</h4>

                                    </div>

                                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                    <p>Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                </button>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row" style="padding: 15px; align-items: baseline; justify-content: space-between;">
                            <h4>Lessons</h4>
                            <button class="btn btn-info animation-on-hover btn-sm" type="button">Add</button>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg modal-black" id="addCourse" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content" style="box-shadow: 0 0 5px 0px rgb(230 239 195)">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <i class="tim-icons icon-simple-remove"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('course.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Course Title</label>
                                            <input type="text" class="form-control black-text" id="title"
                                                name="title" placeholder="Enter title">
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Course Type</label>
                                            <input type="text" class="form-control" id="type" name="type"
                                                placeholder="Enter type">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Course Description</label>
                                            <input type="text" class="form-control" id="description" name="description"
                                                placeholder="Enter description">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success btn-sm">
                                                Add Course
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('js')
        <script>
            setTimeout(function() {
                document.getElementById('success-message').style.display = 'none';
            }, 3000);
            const course_button = document.querySelectorAll('.course');
            course_button.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove the active class from all buttons
                    course_button.forEach(btn => btn.classList.remove('active-up'));

                    // Add the active class to the clicked button
                    button.classList.add('active-up');
                });
            });
        </script>
    @endpush
