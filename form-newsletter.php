<?php
/**
 * The template for the integrated form to capture emails for the newsletter to the Smarkio/Primavera Academy
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>


<form class="form-newsletter" data-smk-form action="https://p.smrk.io/sm.js?b=d21344db675d4a981bc77916723341ce4c54d9b9" method="post">
	<input type="hidden" name="redirect_ok" value="/obrigada/">
    <input type="hidden" name="redirect_error" value="/not_found/">
    <label for="nl-frm-nome">O seu nome</label>  <input id="nl-frm-nome" type="text" name="lead[first_name]" required="required"><br>
    <label for="nl-frm-ultimoNome">O seu apelido</label>  <input id="nl-frm-ultimoNome" type="text" name="lead[last_name]" required="required"><br>
    <label for="nl-frm-email">O seu e-mail</label> <input id="nl-frm-email" type="email" name="lead[email]" required="required"><br>
	<input type="submit" value="Enviar">
</form>


<form class="form-newsletter" data-smk-form action="https://p.smrk.io/sm.js?b=d21344db675d4a981bc77916723341ce4c54d9b9" method="post">
	<input type="hidden" name="redirect_ok" value="/obrigada/">
    <input type="hidden" name="redirect_error" value="/not_found/">
    <label for="nl-frm-nome">O seu nome</label>  <input id="nl-frm-nome" type="text" name="lead[first_name]" required="required"><br>
    <label for="nl-frm-email">O seu e-mail</label> <input id="nl-frm-email" type="email" name="lead[email]" required="required"><br>
	<input type="submit" value="Enviar">
</form>
