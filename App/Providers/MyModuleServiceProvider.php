namespace sabashahzadi/book-module;

use Illuminate\Support\ServiceProvider;

class MyModuleServiceProvider extends ServiceProvider
{
public function boot()
{
// Load routes, views, migrations, etc.
}

public function register()
{
// Bind any services or repositories
}
}