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
                    <div class="card-header">Edit Posts

                        <a href="{{url('posts')}}" class="btn btn-danger float-right">Back</a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url('posts/'.$post->id)}}">
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <label for="">Title</label>
                                <input required name="title" type="text" class="form-control" value="{{$post->title}}" >
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Description</label>
                                <textarea required value="{!! $post->description !!}" name="description" class="form-control" rows="3">{!! $post->description !!}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary" >Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
