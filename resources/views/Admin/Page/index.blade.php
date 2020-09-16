@extends('layouts.admin')

@section('meta_title','Admin page')
@section('tag_in_head')

<script type="text/javascript">

    $(function(){
        let j1 = new Jodit(".page_info",{'height':550,'placeholder':'your page summary'});
        let j2 = new Jodit(".page_body",{'height':550,'placeholder':'your page body text'});
    });

</script>
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">Create new page</h1>

            <form class="form pt-4" action="{{route('admin.pages.store')}}" method="post">
                @csrf 
                
                <div class="form-group">
                    <label>title</label>
                    <input type="text" name="page_title" class="form-control"> 
                </div>

                <div class="form-group">
                    <label>summary</label>
                    <textarea name="page_info" class="page_info form-group"></textarea>
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea name="page_body" class="page_body form-group"></textarea>
                </div>
               <div class="form-group">
                <div class="row">
                    <div class="col-lg-4">
                        <label class="alert alert-info">
                            <input type="checkbox" name="is_public" class='form-control is_public'> Show As Public 
                        </label>
                        
                    </div>
                    
                    <div class="col-lg-4">
                        <label class="alert alert-info">
                            <input type="checkbox" name="is_index" class='form-control is_index'> Show Index Page 
                        </label>
                        
                    </div>
                    <div class="col-lg-4">
                        <label class="alert alert-info">
                            <input type="checkbox" name="save_draft" class='form-control save_draft'> Save As Draft 
                        </label>
                        
                    </div>

                </div>
                
               </div>
               
                <div class="btn-group float-right pt-4">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
                

            </form>
            
        </div>

            <div class="pt-4">
                <p class="pt-4">&nbsp;</p>
                
            </div>
        <div class="col-lg-12">
            <h1 class="text-center">
                All public post
            </h1>
            <ul class="list-group">
                @foreach($pages as $page)

                    <li class="list-group-item">
                        <div class="container">
                            <h1 class="text-center">{{$page->page_title}}</h1>
                            
                            {!!$page->page_info!!}

                            <div class="pt-4 float-right">
                                <p>
                                    Owner  {{$page->user->name}}    created date {{$page->created_at}}  {{$page->created_at->diffForHumans()}}
                                   
                                </p>
                                
                            </div>
                            
                        </div>
                        

                    </li>
                    
                @endforeach
            </ul>
            
        </div>
        
    </div>
    

@endsection
