<h1>Upload file</h1>
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"><br><br>
    <button type="submit" style="color:green">Upload</button>
</form>