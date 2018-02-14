## README

### Custom Write file Logs

## Composer required

```
composer require "gabrielapg/laravel-custom-log @dev"
```

### Import trait CustomWriteLogs

```
use CustomWriteLogs;
```

### Write log

```
    $this->writeLog('customLog', 'description: Description your log');
```

**First param define name file log and secound param define description log.**
**Level default INFO**

[References logs and levels](https://laravel.com/docs/5.4/errors#logging)

### Example in Controller

```

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Log\CustomWriteLogs;

class ExampleController extends Controller
{
    use CustomWriteLogs;

    /**
     * Index 
     *
     */
    public function index()
    {
        $this->writeLog('customLog', 'description: Description your log');
    }
}
```
