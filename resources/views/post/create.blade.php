@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">Add Posts

                        <a href="{{url('posts')}}" class="btn btn-danger float-right">Back</a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url('posts')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Title</label>
                                <input required name="title" type="text" class="form-control" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Description</label>
                                <textarea required name="description" class="form-control" ></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary" >submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
