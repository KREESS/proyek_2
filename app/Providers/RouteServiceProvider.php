<?php

// Pernyataan declare jika ada
declare(strict_types=1);

namespace App;

// Kode PHP setelah deklarasi namespace
class MyClass
{
    // Definisikan kelas, fungsi, atau kode lainnya di sini
}

// Deklarasi namespace harus berada di baris paling awal setelah pernyataan declare atau pernyataan PHP lainnya.
namespace App\SubNamespace;

// Kode PHP setelah deklarasi namespace
class AnotherClass
{
    // Definisikan kelas, fungsi, atau kode lainnya di sini
}

?>
<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/redirect'; // Atur URL redirect yang diinginkan setelah login

    // ...
}
