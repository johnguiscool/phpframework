# phpframework

A simple PHP framework.

# Routing

Routes are handled by the Router class in the core/Router.php file.  Routes can be added to the routes.php file in the following format:

```
$router->get('', 'PagesController@home');
```

Controllers should be saved in the controllers directory.  To display a view, the controller method should be of the form:

```
return view('index', ['names' => $names]);
```

# Database

The database classes can be found in the core/database/Connection.php and core/database/QueryBuilder.php files.

Database queries can be made in the following format:

```
$names = App::get('database')->selectAll('users');
```

The following database methods are available:

```
selectAll('table_name')
insert('table_name',$valuesArray)
```
