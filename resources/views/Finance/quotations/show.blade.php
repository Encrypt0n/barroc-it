
<h1>{{ $quotation->companyname   }}</h1>
<p>{{ $quotation->contactpersonname    }}</p>
<p>{{ $quotation->contactpersonemail    }}</p>
<p>{{ $quotation->contactpersonphone    }}</p>
<p>{{ $quotation->companyaddress    }}</p>
<p>{{ $quotation->italian_light    }} x Italian Light</p>
<p>{{ $quotation->italian    }} x Italian</p>
<p>{{ $quotation->italian_deluxe    }} x Italian Deluxe</p>
<p>{{ $quotation->italian_deluxe_special    }} x Italian Deluxe Special</p>
<p>{{ $quotation->espresso_beneficio    }} x Espresso Beneficio</p>
<p>{{ $quotation->yellow_bourbon_brasil    }} x Yellow Bourbon Brasil</p>
<p>{{ $quotation->espresso_roma    }} x Espresso Roma</p>
<p>{{ $quotation->red_honey_honduras    }} x Red Honey Honduras</p>

<form action="{{ route('reviewQuotation.store', $quotation->id)  }}" method="post">

    @csrf
    <input type="submit" value="Yes" class="btn btn-info">
    <input type="hidden" name="quotation_id" value="{{ $quotation->id  }}">


</form>
