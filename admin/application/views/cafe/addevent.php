<div class="row">
<div class="col-lg-5">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                   
                </div>
                Add Event
            </div>
            <div class="panel-body">
            <?php echo form_open_multipart('event/save')?>
            <div class="form-group">
                    <label class="control-label" for="username">Event Name</label>
                    <input type="text" placeholder="Event name/title"  required=""  name="name" class="form-control">
            </div>
            <div class="form-group">
                    <label class="control-label" for="username">Event Place</label>
                    <input type="text" placeholder="Event Place"  required=""  name="place" class="form-control">
            </div>

            <div class="form-group">
                    <label class="control-label" for="username">Event date</label>
                    <input type="datetime-local"  required=""  name="eventdate" class="form-control">
            </div>
            <div class="form-group">
                    <label class="control-label" for="username">Choose Image</label>
                    <input type="file"  required="" class="form-control" accept="image/*">
            </div>
            <div class="form-group">
                    <label class="control-label" for="username">Event Description</label>
                    <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-sm" style="float:right">Save Event</button>
            </div>
            </form>
            </div>
            <div class="panel-footer">
               Please Choose image dimentation 350*220
            </div>
        </div>
    </div>
</div>