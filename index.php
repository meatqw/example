<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/css/style.css">
    <title>Document</title>
  </head>
  <body>
    <div id="content">
      <form>
        <div class="form-group">
        <label for="nameInput">Your name</label>
          <input
            type="email"
            class="form-control"
            id="nameInput"
            aria-describedby="nameHelp"
            placeholder="Enter name"
          />
          <label for="addressInput">Your address</label>
          <input
            type="email"
            class="form-control"
            id="addressInput"
            aria-describedby="addressHelp"
            placeholder="Enter address"
          />
          <small id="addressHelp" class="form-text text-muted"
            >Mistakes in the address will be automatically corrected.</small
          >
        </div>
        <button type="button" id='submit' class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
  <script src="/static/js/script.js"></script>
</html>
