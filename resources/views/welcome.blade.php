<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('js/dataTables.semanticui.min.js') }}" defer></script>
    <script src="{{ asset('js/semantic.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.semanticui.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body id="root">
    <div class="ui tablet computer only padded grid">
      <div class="ui inverted borderless top fixed fluid menu">
        <a class="header item">Project name</a>
        <div class="right menu">
          <div class="item">
            <div class="ui small input"><input placeholder="Search..." /></div>
          </div>
          <a class="item">Dashboard</a> <a class="item">Settings</a>
          <a class="item">Profile</a> <a class="item">Help</a>
        </div>
      </div>
    </div>
    <div class="ui mobile only padded grid">
      <div class="ui top fixed borderless fluid inverted menu">
        <a class="header item">Project Name</a>
        <div class="right menu">
          <div class="item">
            <button class="ui icon toggle basic inverted button">
              <i class="content icon"></i>
            </button>
          </div>
        </div>
        <div class="ui vertical borderless inverted fluid menu">
          <a class="item">Dashboard</a> <a class="item">Settings</a>
          <a class="item">Profile</a> <a class="item">Help</a>
          <div class="ui fitted divider"></div>
          <div class="item">
            <div class="ui small input"><input placeholder="Search..." /></div>
          </div>
        </div>
      </div>
    </div>
    <div class="ui padded grid">
      <div
        class="three wide tablet only three wide computer only column"
        id="sidebar"
      >
        <div class="ui vertical borderless fluid text menu">
          <a class="active item">Overview</a> <a class="item">Reports</a>
          <a class="item">Analytics</a> <a class="item">Export</a>
          <div class="ui hidden divider"></div>
          <a class="item">Nav item</a> <a class="item">Nav item again</a>
          <a class="item">One more nav</a> <a class="item">Another nav item</a>
          <a class="item">More navigation</a>
          <div class="ui hidden divider"></div>
          <a class="item">Macintosh</a> <a class="item">Linux</a>
          <a class="item">Windows</a>
        </div>
      </div>
      <div
        class="sixteen wide mobile thirteen wide tablet thirteen wide computer right floated column"
        id="content"
      >
        <div class="ui padded grid">
          <div class="row">
            <h1 class="ui huge dividing header">Dashboard</h1>
          </div>
          <div class="center aligned row">
            <div
              class="eight wide mobile four wide tablet four wide computer column"
            >
              <img
                class="ui centered small circular image"
                src="./static/images/wireframe/square-image.png"
              />
              <div class="ui large basic label">Label</div>
              <p>Something else</p>
            </div>
            <div
              class="eight wide mobile four wide tablet four wide computer column"
            >
              <img
                class="ui centered small circular image"
                src="./static/images/wireframe/square-image.png"
              />
              <div class="ui large basic label">Label</div>
              <p>Something else</p>
            </div>
            <div
              class="eight wide mobile four wide tablet four wide computer column"
            >
              <img
                class="ui centered small circular image"
                src="./static/images/wireframe/square-image.png"
              />
              <div class="ui large basic label">Label</div>
              <p>Something else</p>
            </div>
            <div
              class="eight wide mobile four wide tablet four wide computer column"
            >
              <img
                class="ui centered small circular image"
                src="./static/images/wireframe/square-image.png"
              />
              <div class="ui large basic label">Label</div>
              <p>Something else</p>
            </div>
          </div>
          <div class="ui hidden section divider"></div>
          <div class="row">
            <h1 class="ui huge dividing header">Section title</h1>
          </div>
          <div class="row">
            <table class="ui single line striped selectable unstackable table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>