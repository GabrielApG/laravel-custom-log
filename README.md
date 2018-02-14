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

**First param define name file log and secound param define description log**
***Level default INFO***

### Example in Controller

```

namespace App\Http\Controllers;

use Log\CustomWriteLogs;

class ExampleController extends Request
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
