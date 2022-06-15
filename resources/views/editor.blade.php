<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Builder | Page Maker</title>
    <link rel="stylesheet" href="//unpkg.com/grapesjs/dist/css/grapes.min.css">
    <style>
        body, html {
            margin: 0;
            height: 100%;
        }
    </style>
</head>
<body>
<div id="editor">

</div>
<script src="//unpkg.com/grapesjs"></script>
<script type="text/javascript">
    const editor = grapesjs.init({
        container: '#editor',
        fromElement: 1,
        height: '100%',
        storageManager: { type: 0 },
        plugins: ['gjs-blocks-basic', 'grapesjs-blocks-bootstrap4'],
        canvas: {
            styles: [
                'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css'
            ],
            scripts: [
                'https://code.jquery.com/jquery-3.3.1.slim.min.js',
                'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js'
            ],
        }
    });

    // Add blocks
    editor.BlockManager.add('collection-1', {
        label: 'Collection 1',
        content: { type: 'collection', category: 'SET-1' },
    });
    editor.BlockManager.add('collection-2', {
        label: 'Collection 2',
        content: { type: 'collection', category: 'SET-2' },
    });
    editor.BlockManager.add('collection-3', {
        label: 'Collection 3',
        content: { type: 'collection', category: 'SET-2' },
    });

    editor.BlockManager.add('Navbar', {
        category: 'Basics',
        label: 'navbar',
        content: '<nav class="navbar navbar-expand-lg bg-light"><div class="container-fluid"><a class="navbar-brand" href="#">Navbar</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarSupportedContent"><ul class="navbar-nav me-auto mb-2 mb-lg-0"><li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li><li class="nav-item"><a class="nav-link" href="#">Link</a></li><li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a><ul class="dropdown-menu" aria-labelledby="navbarDropdown"><li><a class="dropdown-item" href="#">Action</a></li><li><a class="dropdown-item" href="#">Another action</a></li><li><hr class="dropdown-divider"></li><li><a class="dropdown-item" href="#">Something else here</a></li></ul></li><li class="nav-item"><a class="nav-link disabled">Disabled</a></li></ul><form class="d-flex" role="search"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-success" type="submit">Search</button></form></div></div></nav>',
        type: "navbar",
        selectable: !0,
        attributes: {class: "fa fa-bars"}
    });
    editor.BlockManager.add('Carousel', {
        category: 'Basics',
        label: 'carousel',
        content: '<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false"><div class="carousel-indicators"><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button></div><div class="carousel-inner"><div class="carousel-item active"><img src="..." class="d-block w-100" alt="..."> <div class="carousel-caption d-none d-md-block"><h5>First slide label</h5><p>Some representative placeholder content for the first slide.</p></div></div><div class="carousel-item"><img src="..." class="d-block w-100" alt="..."><div class="carousel-caption d-none d-md-block"> <h5>Second slide label</h5><p>Some representative placeholder content for the second slide.</p></div></div><div class="carousel-item"><img src="..." class="d-block w-100" alt="..."><div class="carousel-caption d-none d-md-block"><h5>Third slide label</h5><p>Some representative placeholder content for the third slide.</p></div></div></div><button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button></div>',
        type: "carousel",
        selectable: !0,
        attributes: {class: "fa fa-exchange"}
    });
    editor.BlockManager.add('INPUT', {
        category: 'Basics',
        label: 'input',
        content: '<input type="text" class="form-control" placeholder="" aria-label="">',
        type: "input",
        selectable: !0,
        attributes: {class: "fa fa-keyboard-o"}
    });
    editor.BlockManager.add('Navigation', {
        category: 'Basics',
        label: 'navigation',
        content: '<div class="card text-center"><div class="card-header"><ul class="nav nav-tabs card-header-tabs"><li class="nav-item"><a class="nav-link active" aria-current="true" href="#">Active</a></li><li class="nav-item"><a class="nav-link" href="#">Link</a></li><li class="nav-item"><a class="nav-link disabled">Disabled</a></li></ul></div><div class="card-body"><h5 class="card-title">Special title treatment</h5><p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="#" class="btn btn-primary">Go somewhere</a></div></div>',
        type: "navigation",
        selectable: !0,
        attributes: {class: "fa fa-align-left"}
    });
    editor.BlockManager.add('button', {
        category: 'Basics',
        label: 'button',
        content:'<button type="button" class="btn btn-primary">Primary</button>',
        type: "button",
        selectable: !0,
        attributes: {class: "fa  fa-square-o"}
    });
    editor.BlockManager.add('form', {
        category: 'Basics',
        label: 'form',
        content:'<form><div class="mb-3"><label for="exampleInputEmail1" class="form-label">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><div id="emailHelp" class="form-text">We will never share your email with anyone else.</div></div><div class="mb-3"><label for="exampleInputPassword1" class="form-label">Password</label><input type="password" class="form-control" id="exampleInputPassword1"></div><div class="mb-3 form-check"><input type="checkbox" class="form-check-input" id="exampleCheck1"><label class="form-check-label" for="exampleCheck1">Check me out</label></div><button type="submit" class="btn btn-primary">Submit</button></form>',
        type: "form",
        selectable: !0,
        attributes: {class: "fa fa-file-text"}
    });

    editor.BlockManager.add('raw', {
        category: 'Basics',
        label: 'raw',
        class: 'container',
        content: '<div class="container-fluid"> container fluid</div>',
        type: "container",
        selectable: !0,
        attributes: {class: "fa Example of columns fa-columns"}
    });
    editor.BlockManager.add('iframe', {
        category: 'Basics',
        label: 'iframe',
        content: '<div class="ratio ratio-16x9"><iframe src="" title="" allowfullscreen></iframe></div>',
        type: "iframe",
        selectable: !0,
        attributes: {class: "fa fa-archive"}
    });
    editor.BlockManager.add('Section', {
        category: 'Basics',
        label: 'section',
        content: '<div class="container"><div class="row"><div class="col">Column</div><div class="col">Column</div><div class="col">Column</div></div></div>',
        type: "section",
        selectable: !0,
        attributes: {class: "fa fa-clone"}
    });
    editor.BlockManager.add('img', {
        category: 'Basics',
        label: 'img',
        content: '<img src="" class="img-fluid" alt="">',
        type: "img",
        selectable: !0,
        attributes: {class: "fa fa-picture-o"}
    });
    editor.BlockManager.add('products', {
        category: 'Shopify',
        label: 'Product',
        content: '<div class="card" style="width: 18rem;"><img src="..." class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">Card title</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p><a href="#" class="btn btn-primary">Go somewhere</a></div></div>',
        type: 'image',
        selectable: !0,
        attributes: {class: "fa fa-bell"}
    });
    editor.DomComponents.addType('div', {
        isComponent: el => el.tagName == 'DIV',
        model: {
            defaults: {
                traits: [
                    // Strings are automatically converted to text types
                    'name', // Same as: { type: 'text', name: 'name' }
                    'placeholder',
                    'value',
                    {
                        type: 'select', // Type of the trait
                        label: 'Type', // The label you will see in Settings
                        name: 'type', // The name of the attribute/property to use on component
                        options: [
                            { id: 'text', name: 'Text'},
                            { id: 'email', name: 'Email'},
                            { id: 'password', name: 'Password'},
                            { id: 'number', name: 'Number'},
                        ]
                    }, {
                        type: 'checkbox',
                        name: 'required',
                    }],
                // As by default, traits are binded to attributes, so to define
                // their initial value we can use attributes
                attributes: { type: 'text', required: true },
            },
        },
    });

    // Add the custom component
    editor.DomComponents.addType('collection', {
        model: {
            defaults: {
                category: 'SET-1',
            },
            // Customize the export HTML
            toHTML() {
                const category = this.get('category');
                return `<div>{ VAR-TO-REPLACE-${category} }</div>`
            },
        },
        view: {
            onRender() {
                const { $el, model } = this;
                const category = model.get('category');
                $el.empty();
                // eg. you can make some ajax request and then...
                const products = [
                    '<div>Product 1</div>',
                    '<div>Product 2</div>',
                    '<div>Product 3</div>',
                ];
                products.forEach(product => {
                    // If you append to the element, products will be static
                    // and you won't be able to select/edit them.
                    // So this approach is to use when you want kind
                    // of placeholders elements.
                    $el.append(product);

                    // If actually need to select/edit them, append the HTML
                    // to the model
                    // model.append(product);
                });
            }
        }
    })
</script>
</body>
</html>
