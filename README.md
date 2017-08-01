# root
get root directory path for your project

## Usage

add `Root::root('project')` where you need the root directory of your proyect.

## Example

For the structure:

~~~
/usr/share/www/projects
- myProject
-- src
-- tests
~~~

using `Root::root('myProject')`

outputs:
`/usr/share/www/projects/myProject`
