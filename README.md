<h1>Kurs Bca</h1>
<p>Tools yang bisa membuat user mendapatkan informasi mengenai kurs tanpa harus register untuk mendapatkan api pada bank bca</p>

<h3>Note!!!!</h3>
<p>Jangan lupa dimodif lagi karena ini harus di call berulang ulang alias ga realtime</p>

```

composer require sayuz/kurs-bca:dev-main

```

<h5>
  Pemakaian
</h5>
```

$kurs = new Kurs();

$kurs->buy_usd($method ); // 0 -> E- Money, 1 -> Trade di Teller, 2 -> Bank Notes


```
