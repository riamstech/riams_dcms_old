@extends('layouts.admin')





@section('content')


    <h1>Media</h1>

    @if($photos)


        <form action="delete/media" method="post" class="form-inline">

            {{csrf_field()}}

            {{method_field('delete')}}




        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
            </tr>
            </thead>
            <tbody>


            @foreach($photos as $photo)

                {{--<tr>
                    <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                    <td>{{$photo->id}}</td>
                    <td><img height="50" src="{{$photo->file}}" alt=""></td>
                    <td>{{$photo->created_at ? $photo->created_at : 'no date' }}</td>
                    <td>
                        <div class="form-group">
                                 {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>
                    </td>
                </tr>
--}}
                <tr>
                    <td>{{$photo->id}}</td>
                    <td><img height="50" src="{{$photo->file}}" alt=""></td>
                    <td>{{$photo->created_at ? $photo->created_at : 'no date' }}</td>
                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMediasController@destroy',$photo->id]]) !!}

                                 <div class="form-group">
                                    {!! Form::submit('Delete Media', ['class'=>'btn btn-danger']) !!}
                                 </div>
                        {!! Form::close() !!}


                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>

        </form>

    @endif




@stop

@section('scripts')


    <script>


        $(document).ready(function(){


            $('#options').click(function(){


                if(this.checked){

                    $('.checkBoxes').each(function(){


                        this.checked = true;

                    });

                }else {

                    $('.checkBoxes').each(function(){


                        this.checked = false;

                    });



                }






            });



        });


    </script>


@stop

