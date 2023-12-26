
<div class="main-panel">
    <div class="content-wrapper">

    <div class="page-section">
    <div class="container">
      <h1 class="text-center     mb-5 wow fadeInUp">News list</h1>
  

    @if($news->isNotEmpty())
    <div class="container-fluid page-body-wrapper">
    <div align="center" style="padding-top:10px;">
    <table class="table-bordered">
      <tr align="center">
        <th style="padding:10px">Title</th>
        <th style="padding:10px">Content</th>
        <th style="padding:10px">Image</th>
      </tr>
    @foreach($news as $berita)
      <tr align="center">
        <td>{{$berita->title}}</td>
        <td>{{$berita->content}}</td>
        <td><img height="100" width="100" src="newsimage/{{$berita->image}}"></td>
        
      </tr>
    @endforeach
    </table>
    </div>
    </div>
@else
    <p>Tidak ada data dokter.</p>
@endif
         
        </div>
      </div>
    </div>
  </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>