<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="p-5">
    <div class="card-body">
          <form class="mx-2 p-4" action="{{ route('diary.store') }}" method="POST">
               @csrf
          <div class="form-group">
               <label for="judul">Judul</label>
               <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul...">
          </div>
          <div class="form-group">
               <label for="diary">Diary Text</label>
               <input type="text" class="form-control" id="diary" name="diary" placeholder="Diary Text...">
          </div>
          <div class="form-group">
               <label for="mood">Mood</label>
               <select class="form-control" id="mood" name="mood">
                    <option selected>Open this select menu</option>
                    <option value="Marah">Marah</option>
                    <option value="Sedih">Sedih</option>
                    <option value="Senang">Senang</option>
                    <option value="Capek">Capek</option>
                    <option value="Stress">Stress</option>
                    <option value="Cinta">Cinta</option>
               </select>
          </div>
          <div c
          <div class="d-flex justify-content-end">
               <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          </form>
     </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>


