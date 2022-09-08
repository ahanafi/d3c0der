<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<style>
    body{
    background-color:#f2f7fb;
}

.mt-100{
    margin-top:100px;
}
.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 0 5px 0 rgba(43,43,43,.1), 0 11px 6px -7px rgba(43,43,43,.1);
    box-shadow: 0 0 5px 0 rgba(43,43,43,.1), 0 11px 6px -7px rgba(43,43,43,.1);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.card .card-header {
    background-color: transparent;
    border-bottom: none;
    padding: 20px;
    position: relative;
}

.card .card-header h5:after {
    content: "";
    background-color: #d2d2d2;
    width: 101px;
    height: 1px;
    position: absolute;
    bottom: 6px;
    left: 20px;
}

.card .card-block {
    padding: 1.25rem;
}

.dropzone.dz-clickable {
    cursor: pointer;
}

.dropzone {
    min-height: 150px;
    border: 1px solid rgba(42,42,42,0.05);
    background: rgba(204,204,204,0.15);
    padding: 20px;
    border-radius: 5px;
    -webkit-box-shadow: inset 0 0 5px 0 rgba(43,43,43,0.1);
    box-shadow: inset 0 0 5px 0 rgba(43,43,43,0.1);
}

.m-t-20 {
    margin-top: 20px;
}

.btn-primary, .sweet-alert button.confirm, .wizard>.actions a {
    background-color: #4099ff;
    border-color: #4099ff;
    color: #fff;
    cursor: pointer;
    -webkit-transition: all ease-in .3s;
    transition: all ease-in .3s;
}

.btn {
    border-radius: 2px;
    text-transform: capitalize;
    font-size: 15px;
    padding: 10px 19px;
    cursor: pointer;
}
</style>
<body>
<div class="row d-flex justify-content-center mt-100">

    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <h5>File Upload</h5>
            </div>
            <div class="card-block">
                <form action="process.php" method="POST" class="dropzone dz-clickable" enctype="multipart/form-data">
                    <div class="dz-default dz-message">
                        <input type="file" name="files[]" multiple required>
                    </div>
                    <input type="hidden" name="process" value="true">
                </form>
                <div class="text-center m-t-20">
                    <button onclick="submitForm()" type="button" id="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<script>
    const submitForm = () => document.forms[0].submit();
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>