<html>
    <head>
        @include('partial/styles')
        <body>
            <table class="table table-hover table-striped">
                <tr>
                
                <th>Category name</th>
                <th> parent Category </th>

                </tr>
                
                @foreach($category as $cat)
                   <tr><td>{{$cat->name}}</td>
                    <td>@if($cat->parent_id==NULL)
                       primary category
                       
                       @else
                        {{$cat->parent->name}}
                        @endif
                    </td>
                </tr>

                @endforeach
                
            </table>
            
        </body>
        
    </head>
</html>