@extends('backend.layout.backend')

@section('content')
    <div class="col-sm-6 col-md-9 col-lg-9">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}
                        <a href="{{route($route .'index')}}" class="btn btn-success">List</a>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>PlaceName</td>
                            <td>{{$data['row']->placename}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{$data['row']->description}}</td>
                        </tr>
                        <tr>
                            <td>Details</td>
                            <td>{{$data['row']->details}}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                           <td> @foreach($data['images'] as $j => $image)
                @if ($image->destination_id === $data['row']->id)
                    <img src="{{ asset('uploads/images/destinations/images/' . $image->image) }}" alt="Image">
                @endif
            @endforeach
</td>
                        </tr>



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>














@endsection


