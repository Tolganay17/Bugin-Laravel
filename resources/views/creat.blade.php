<!DOCTYPE html>
<html lang="en">

<head> 
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('po.store') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!-- Name -->
                    @foreach(config('translatable.locales') as $locale)
                    <div class="mt-4">
                        <label for="title_{{ $locale }}">Title ({{ strtoupper($locale) }})</label>

                        <input type="text" name="{{ $locale }}[title]" id="title_{{ $locale }}"
                               value="{{ old($locale . '.title') }}"
                               class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus />
                    </div>

                    <div class="mt-4">
                        <label for="content_{{ $locale }}">Full Text ({{ strtoupper($locale) }})</label>
                        <textarea name="{{ $locale }}[content]" id="content_{{ $locale }}" rows="5"
                                  class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old($locale . '.full_text') }}</textarea>
                    </div>
                    <div class="mt-4">
                    <label for="slug_{{ $locale }}">Slug ({{ strtoupper($locale) }})</label>

                    <input type="text" name="{{ $locale }}[slug]" id="slug_{{ $locale }}"
                           value="{{ old($locale . '.slug') }}"
                           class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus />
                </div>
                
                    
                    @endforeach
                    
                    <div class="mt-4">
                        <label for="">Author</label>
                        <input type="text" name="author" class="form-control">
                      </div>

                      <div class="mt-4">
                        <label for="">Category_id</label>
                        <input type="text" name="category_id" class="form-control">
                      </div>

                    <div class="mt-4">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control">
                      </div>
                    
                      <div class="form-group">
                        <input type="submit" class="btn btn-info" value="save">
                </div>
               
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>
