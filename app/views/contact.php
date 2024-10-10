<?php $this->layout('master'); ?>

<h1>Contact</h1>

<form action="/contact" method="post">
  <input type="text" name="nome" id="nome" placeholder="nome">
  <input type="email" name="email" id="email" placeholder="email">
  <button type="submit">Enviar</button>
</form>