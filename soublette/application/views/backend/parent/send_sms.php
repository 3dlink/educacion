<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php echo form_open(base_url(). 'admin/send_sms/enviar' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
            <div class="padded">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Numero</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="receiver" value="" placeholder="Su número" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Mensaje</label>
                    <div class="col-sm-5">
                        <div class="box closable-chat-box">
                            <div class="box-content padded">
                                    <div class="chat-message-box">
                                    <textarea required name="message" id="ttt" rows="5" class="form-control" placeholder="Agregar mensaje"></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-5">
                  <button type="submit" class="btn btn-info">Enviar Mensaje</button>
              </div>
            </div>
        </form>
    </div>
</div>