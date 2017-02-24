<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Email The Author</h4>
      </div>
      <div class="modal-body">
          <form name="Contact" action="/contact/" method="post">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Name</span>
                  <input type="text" class="form-control" placeholder="Your name here" name="name" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Email</span>
                  <input type="text" class="form-control" placeholder="example@gmail.com" name="email" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="input-group message">
                  <span class="input-group-addon messageHed" id="basic-addon1">Message</span>
                  <textarea class="form-control messageDek" placeholder="Leave me a message." name="message" aria-describedby="basic-addon1"></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Submit">
              </div>
          </form>
      </div>
    </div>
  </div>
</div>