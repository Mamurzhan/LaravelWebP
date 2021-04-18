    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body>
    <section class="bg-dark text-light" style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card-header">
                        Add new Story
                    </div>
                    <div class="card-body">
                        @if(Session::has('story_added'))
                        <div class="alert alert-secondary" role="alert">
                            {{Session::get('story_added')}}
                        </div> 
                        @endif
                        <form method="POST" action="{{route('story.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="topic">Topic</label>
                            <input type="text" name="topic" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="story" class="col-form-label">Message:</label>
                            <textarea class="form-control" type="text" name="story"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file"> Choose image</label>
                            <input type="file" name="file" class="form-control" onchange="previewFile(this)"/>
                            <img src="" alt="image" id="previewImg" style="max-width: 130px;margin-top:20px" />
                        </div>
                        <a href="/all-user" class="btn btn-success">back</a>

                        <button type="submit" class="btn btn-primary"> Submit</button>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <script>
        function previewFile(input){
            var file=$("input[type=file]").get(0).files[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
    </body>
