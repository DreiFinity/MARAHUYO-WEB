<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Available Rooms</title>
  <style>
    body {
      background: #1a202c; 
      color: white; 
      font-family: Arial, sans-serif; 
      padding: 20px;
    }
    .room-card {
      background: #2d3748;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 15px;
      box-shadow: 0 0 8px rgba(0,0,0,0.7);
    }
    .room-card img {
      max-width: 300px;
      border-radius: 6px;
      margin-top: 10px;
      display: block;
    }
    h1 {
      margin-bottom: 30px;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Available Rooms</h1>
  @if ($rooms->isEmpty())
    <p>No rooms available at the moment.</p>
  @else
    @foreach ($rooms as $room)
      <div class="room-card">
        <h2>{{ $room->room_name }} ({{ $room->room_type }})</h2>
        <p><strong>Max Guests:</strong> {{ $room->max_guests }}</p>
        <p><strong>Price per night:</strong> ${{ number_format($room->price_per_night, 2) }}</p>
        <p>{!! nl2br(e($room->description)) !!}</p>
        @if (!empty($room->image_url))
          <img src="{{ asset($room->image_url) }}" alt="{{ $room->room_name }}" />
        @endif
      </div>
    @endforeach
  @endif
</body>
</html>
