# Database Integration in Laravel Marahuyo Hotel

This document explains how the Laravel Marahuyo Hotel project connects to the database, focusing on Eloquent models, controllers (e.g., `RoomController`), and configuration.

---

## 1. Database Configuration

Database settings are defined in `.env` and `config/database.php`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=marahuyo_hotel
DB_USERNAME=root
DB_PASSWORD=secret
```

---

## 2. Eloquent Models

Each table has a corresponding Eloquent model (e.g., `Room`, `Booking`, `Guest`). Models are located in `app/Models/`.

**Example: `Room` Model**
```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['number', 'type', 'status', 'price'];
}
```

---

## 3. Controllers

Controllers handle HTTP requests and interact with models.

**Example: `RoomController`**
```php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function store(Request $request)
    {
        Room::create($request->all());
        return redirect()->route('rooms.index');
    }
}
```

---

## 4. Database Queries

Eloquent provides an expressive syntax for database operations:

- Retrieve all rooms: `Room::all()`
- Find a room: `Room::find($id)`
- Create a room: `Room::create([...])`
- Update a room: `$room->update([...])`
- Delete a room: `$room->delete()`

---

## 5. Relationships

Models can define relationships (e.g., a `Room` has many `Bookings`):

```php
public function bookings()
{
    return $this->hasMany(Booking::class);
}
```

---

## 6. Migrations

Database schema is managed via migrations in `database/migrations/`.

**Example:**
```php
Schema::create('rooms', function (Blueprint $table) {
    $table->id();
    $table->string('number');
    $table->string('type');
    $table->decimal('price', 8, 2);
    $table->timestamps();
});
```

---

## Summary

- Configure DB in `.env`
- Use Eloquent models for data access
- Controllers (like `RoomController`) interact with models
- Use migrations for schema management

Refer to Laravel's [official documentation](https://laravel.com/docs/database) for more details.