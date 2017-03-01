<hr />

<div class="row">
	<div class="col-md-12">
		<div class="tabs-vertical-env">
			<ul class="nav tabs-vertical">
			<li class="active"><a href="#b-profile" data-toggle="tab">Select A SMS Service</a></li>
				<li>
					<a href="#v-profile" data-toggle="tab">
						Twilio Settings
						<?php if ($active_sms_service == 'twilio'):?>
							<span class="badge badge-success">Twilio</span>
						<?php endif;?>
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="b-profile">
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/active_service' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						<div class="form-group">
							<label class="col-sm-3 control-label">Seleccionar</label>
	                        					<div class="col-sm-5">
									<select name="active_sms_service" class="form-control">
										<option value=""<?php if ($active_sms_service == '') echo 'selected';?>>
											Seleccionar
										</option>
										<option value="twilio"
										<?php if ($active_sms_service == 'twilio') echo 'selected';?>>
											Twilio
										</option>
									</select>
								</div>
						</div>
						<div class="form-group">
					                    <div class="col-sm-offset-3 col-sm-5">
					                        <button type="submit" class="btn btn-info">Guardar</button>
					                    </div>
		                			</div>
	            			<?php echo form_close();?>
				</div>
				<div class="tab-pane" id="v-profile">
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/twilio' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						<div class="form-group">
							<label  class="col-sm-3 control-label">Twilio SID</label>
							<div class="col-sm-5">
						  		<input type="text" class="form-control" name="twilio_account_sid" value="AC3a5d6f6e41a486e6ef1730fcfe28096a">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-3 control-label">Token</label>
							<div class="col-sm-5">
						    		<input type="text" class="form-control" name="twilio_auth_token" value="2323b12b56a5f069eab515426670c63c">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-3 control-label">Telefono</label>
							<div class="col-sm-5">
						   		<input type="text" class="form-control" name="twilio_sender_phone_number" value="+17737172976">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">
							    <button type="submit" class="btn btn-info">Guardar</button>
							</div>
						</div>
	                			<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>