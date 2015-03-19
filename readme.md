# WordPress View Count
Records and displays views based on page load for posts.

Render view counts with the following template tags:

```php
the_view_count();
```
Render view count using the current post\_id in the current query. Will render _0_ if no views are found.




```php
$views = get_view_count($post_id);
```
Get the view count for the provided _$post\_id_. If no id is provided then the _$post\_id_ will default to the current id of the current query, just like ```the_view_count```.


WordPress View Count currently only works for _post_ post type.

## Todo
* Admin panel to select multiple view counts
