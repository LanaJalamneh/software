@section('title', 'Rooms')
@include('layouts.nav')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/room.css">
    <link rel="stylesheet" href="/modal.css">

    <style>
        .btn{
            display: flex;
            justify-content: flex-end;
        }
    </style>

</head>
<body>
<section id="rooms">
    <div class="rooms-container">
            <div class="room">
                <div class="img">
                <img src="{{asset('Images/Standard.jpg')}}" alt="">
                </div>
                <div class="content">
                <h2>Standard Room with Balcony</h2>
                    <ul>
                        <li>Air Conditioning</li>
                        <li>Wifi</li>
                        <li>Work desk</li>
                        <li>Flat-screen TV</li>
                        
                    </ul>
                    <p style="color: #0cbc87;">Free cancellation up to 2 days</p>

                    <div class="confirmation">
                        <p>35$<span style="color: #747579">/day</span></p>
                        <a href="#popup"><button type="submit" class="btn">Select Room</button></a>
                      </div>
                </div>
            </div>

            <div class="room">
                <div class="img">
                <img src="{{asset('Images/Deluxe.jpg')}}" alt="">
                </div>
                <div class="content">
                <h2>Deluxe Room with Balcony</h2>
                    <ul>
                        <li>Air Conditioning</li>
                        <li>Wifi</li>
                        <li>Work desk</li>
                        <li>Flat-screen TV</li>
                        <li>Minibar</li>
                        <li>Coffee/Tea Maker</li>

                    </ul>
                    <p style="color: #D6293E;">Non-Refundable Booking</p>

                    <div class="confirmation">
                        <p>50$<span style="color: #747579">/day</span></p>
                        <a href="#popup"><button type="submit" class="btn">Select Room</button></a>
                </div>
                </div>

            </div>
            <div class="room">
                <div class="img">
                <img src="{{asset('Images/Economy.jpg')}}" alt="">
                </div>
                <div class="content">
                <h2>Economy Room</h2>
                    <ul>
                        <li>Air Conditioning</li>
                        <li>Wifi</li>
                        <li>Work desk</li>
                    </ul>
                    <p style="color: #0cbc87;">Free cancellation up to 3 days</p>

                    <div class="confirmation">
                        <p>25$<span style="color: #747579">/day</span></p>
                   <a href="#popup"><button type="submit" class="btn">Select Room</button></a>
                </div>
                </div>
            </div>

            <div class="room">
                <div class="img">
                <img src="{{asset('Images/Studio.jpg')}}" alt="">
                </div>
                <div class="content">
                <h2>Studio Room</h2>
                    <ul>
                        <li>Air Conditioning</li>
                        <li>Wifi</li>
                        <li>Minibar</li>
                        <li>Flat-screen TV</li>
                        <li>Kitchenette</li>
                        <li>Living Area</li>
                        <li>Dining Table</li>
                        <li>Coffee/Tea Maker</li>
                    </ul>
                    <p style="color: #D6293E;">Non-Refundable Booking</p>

                    <div class="confirmation">
                        <p>70$<span style="color: #747579">/day</span></p>
                        <a href="#popup"><button type="submit" class="btn">Select Room</button></a>
                </div>
                </div>
            </div>
        </div>
</section>

<section class="popup" id="popup">
  <div class="wrapper">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Booking Confirmation</h1>
            <div class="line"></div>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Full Name:</label>
                <input type="text" class="form-control" id="full-name">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Number of Guests:</label>
                <input type="text" class="form-control" id="number-of-Guests">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Number of Nights Stay:</label>
                <input type="text" class="form-control" id="number-of-nights-stay">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Check-in Date:</label>
                <input type="date" class="form-control" id="check-in-date">
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Check-in Time:</label>
                <input type="time" class="form-control" id="check-in-time">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <a href="/single"><button type="button" class="btn">Close</button></a>
            <button type="button" class="btn">Submit</button>
          </div>
        </div>
      </div>
</section>



@include('layouts.footer')

</body>
</html>
