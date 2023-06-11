<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="p-5">
    <h1 class="text-center">My Diary Mood</h1>   
    <div class="d-flex">
      <button type="button" class="btn btn-sm btn-dark ml-auto p-2" onclick="window.location='{{ url('diary/create') }}'">
       Tambah Data
     </button>
    </div>
     <table class="table p-5">
     <thead>
     <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Diary</th>
          <th scope="col">Mood</th>
          <th scope="col">Tanggal</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($diary as $row)
          <tr>
               <th scope="row">{{ $loop->iteration }}</th>
               <td>{{ $row->judul }} </td>
               <td>{{ $row->diary }} </td>
               <td>{{ $row->mood }} </td>
               <td>
                <div class="d-flex">
                  {{ $row->created_at }} 
                <form action="{{ route('diary.destroy',$row->id) }}" method="post" class="m-1">
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm(&quot;Apakah ingin menghapus data tersebut?&quot;)">Hapus</button>
                                        @csrf
                                        @method('delete')
                                        </form>
                </div>
              </td>
          </tr>
     @endforeach
     </tbody>
     </table>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>


