<h1>Kurs Bca</h1>
<p>Tools yang bisa membuat user mendapatkan informasi mengenai kurs tanpa harus register untuk mendapatkan api pada bank bca</p>

<h3>Note!!!!</h3>
<p>Jangan lupa dimodif lagi karena ini harus di call berulang ulang alias ga realtime</p>

```

composer require sayuz/kurs-bca:dev-main

```

<h3>
  Pemakaian
  
</h3>
<p>buy_matauangnya($method)</p>
<a href="https://www.bca.co.id/id/informasi/kurs"></a>


```
$kurs = new Kurs();

$kurs->buy_usd($method ); // 0 -> E- Money, 1 -> Trade di Teller, 2 -> Bank Notes
$kurs->buy_sell($method ); // 0 -> E- Money, 1 -> Trade di Teller, 2 -> Bank Notes


