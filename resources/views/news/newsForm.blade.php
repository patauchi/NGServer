	@csrf
	<label> metaTitle
		<input type="text" name="metaTitle" value="{{ old('metaTitle', $news->metaTitle) }}">
	</label><br>
	<label> metaDescription
		<input type="text" name="metaDescription" value="{{ old('metaDescription', $news->metaDescription) }}">
	</label><br>
	<label> pageSlug
		<input type="text" name="pageSlug" value="{{ old('pageSlug', $news->pageSlug) }}">
	</label><br>
		<label> category
		<input type="text" name="category" value="{{ old('category', $news->category) }}">
	</label><br>
	<label> subcategory
		<input type="text" name="subcategory" value="{{ old('subcategory', $news->subcategory) }}">
	</label><br>
	<label> title
		<input type="text" name="title" value="{{ old('title', $news->title) }}">
	</label><br>
	<label> subtitle
		<input type="text" name="subtitle" value="{{ old('subtitle', $news->subtitle) }}">
	</label><br>
	<label> shortDescription
		<input type="text" name="shortDescription" value="{{ old('shortDescription', $news->shortDescription) }}">
	</label><br>

	<label>largDescription
		<input type="text" name="largDescription" value="{{ old('largDescription', $news->largDescription) }}">
	</label><br>


{{--
<label class="fmLr"> largDescriptions <br>
	<textarea  class="form-control fmLr" id="editorBase" name="largDescription">
		{{ old('largDescription', $news->largDescription) }}
	</textarea>

</label>
<br>
 --}}


	<label> authorNews
		<input type="text" name="authorNews" value="{{ old('authorNews', $news->authorNews) }}">
	</label><br>
	<label> imageTitle
		<input type="text" name="imageTitle" value="{{ old('imageTitle', $news->imageTitle) }}">
	</label><br>
	<label> imageSlug
		<input type="text" name="imageSlug" value="{{ old('imageSlug', $news->imageSlug) }}">
	</label><br>
	<label> imageAuthor
		<input type="text" name="imageAuthor" value="{{ old('imageAuthor', $news->imageAuthor) }}">
	</label><br>
	<label> status
		<input type="text" name="status" value="{{ old('status', $news->status) }}">
	</label><br>
	<label> homeMain
		<input type="text" name="homeMain" value="{{ old('homeMain', $news->homeMain) }}">
	</label><br>
	<label> newsMain
		<input type="text" name="newsMain" value="{{ old('newsMain', $news->newsMain) }}">
	</label><br>
	<label> Categoria
		<input type="number" name="categorie_id" value="{{ old('categorie_id', $news->categorie_id) }}">
	</label><br>

<button>{{$btnText}}</button>


{{--
@auth
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editorBase' );
</script>
@endauth --}}

