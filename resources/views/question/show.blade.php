<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>VIEW: Questions Show</title>
    
  </head>
  <body>
    <h1>VIEW: IT's Show Time Bitches!</h1>
   
   <?php /* @foreach($question as $question)
        <div>
          <li> Số Thứ Tự : {!! $question->id !!} </li>
          <li> Nội Dung : {!! $question->content !!} </li>
          <li> Thông Tin Cuộc Thi : {!! $question->contest_id !!} </li>
        </div>
    @endforeach*/?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    @foreach($question as $question)
        <div>
          <div class="w3-panel w3-round w3-teal">
            <li> Số Thứ Tự : {!! $question->id !!} </li>
          </div>
          <div class="w3-panel w3-round w3-teal">
            <li> Nội Dung : {!! $question->content !!} </li>
          </div>
          <div class="w3-panel w3-round w3-teal">
            <li> Thông Tin Cuộc Thi : {!! $question->contest_id !!} </li>
          </div>
        </div>
    @endforeach
  <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
         <th>Số Thứ Tự</th>
         <th>Đáp Án Của Câu</th>
         <th>Cách Hiển Thị Đáp Án</th>
         <th>Nội Dung</th>
         <th>Là Đáp Án Đúng (0: Sai; 1:Đúng)</th>
        </tr>
      </thead>
      <tbody>
        @foreach($answers as $answers)
          <tr>
          <td>{!! $answers->id !!}</td>
          <td>{!! $answers->question_id !!}</td>
          <td>{!! $answers->abcd !!}</td>
          <td>{!! $answers->content !!}</td>
          <td>{!! $answers->correct !!}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>