<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <form action="/update" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" name="id" class="form-control" value={{$id}}>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value={{$name}}>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Body</label>
            <input type="text" class="form-control" name="body"  value={{$body}}>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control" name="title"  value={{$title}}>
        </div>
     
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>