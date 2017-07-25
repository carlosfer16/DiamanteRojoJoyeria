@extends("tienda.tienda")

@section("content")
<div class="sub-page-padding clearfix">				
    <div class="login-register-tabs" id="login-register-tabs">
        <ul class="resp-tabs-list clearfix">
            <li><a href="#.">Inciar</a></li>
            <li><a href="#.">Registrar</a></li>
        </ul>
        <div class="resp-tabs-container">
            <div>
                <div class="login-register-form">
                    <form name="login_form" id="login_form">
                        <label>Correo Electronico *</label>
                        <input type="text" id="name" name="name" class="validate[required]" data-prompt-position="topLeft:0">
                        <label>Contraseña *</label>
                        <input type="password" id="password" name="password" class="validate[required]" data-prompt-position="topLeft:0">
                        <input type="submit" class="btn btn default btn-fill" value="Ingresar">
                        <div class="clearfix"></div>
                    </form>
                                                            
                </div>
            </div>
            
            <div>
                <div class="login-register-form">
                    <form name="register_form" id="register_form">
                        <label>Username *</label>
                        <input type="text" id="register_form_name" name="register_form_name" class="validate[required]" data-prompt-position="topLeft:0">
                        <label>Email Address *</label>
                        <input type="text" id="register_form_email" name="register_form_email" class="validate[required,custom[email]]" data-prompt-position="topLeft:0">
                        <label>Password *</label>
                        <input type="password" id="register_form_password" name="register_form_password" class="validate[required]" data-prompt-position="topLeft:0">
                        <label>Confirm Password *</label>
                        <input type="password" id="confirm_register_form_password" name="confirm_register_form_password" class="validate[required,equals[register_form_password]]" data-prompt-position="topLeft:0">
                        <input type="submit" class="btn btn default btn-fill" value="Register">
                        <div class="clearfix"></div>
                    </form>

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection