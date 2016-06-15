# Graphic Editor

This is the code architecture for the Graphic Editor. The code only contains flow implementations without the actual implementations. This is only a skeletal implementation without the actual running.
Emphasis is placed on initializing the shapes and outputting the shapes only. Complex calculations (e.g. how to dtermine the output format) are not implemented

### Sample Usage
The sample usage are shown below:

```sh
$ curl -XPOST index/graphiceditor params
```
OR
```sh
$ php main.php --raw=params
```

The format for ```params``` is as follows:
```json
[
    {type: "circle", params : { {attributes: {radius: 7, points: [2.3, 4.5]}, output: { type: "draw", params: {filepath: "/var/log/output.bin"}}}}},
    {type: "square", params : { {attributes: {length: 8, points: [0, 0]}, output: { type: "points", params: { }}}}}
]
```

### Version
0.1

### Requirements
  - php 5.5 and above

License
----

MIT
