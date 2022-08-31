
<!DOCTYPE html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeMarch">
  <!-- Site Title -->
  <title>Samser Tounsi </title>
  <link rel="stylesheet" href="{{url('facture/assets/css/style.css')}}">
</head>

<body>
  <div class="cs-container">
    <div class="cs-invoice cs-style1">
      <div class="cs-invoice_in" id="download_section">
        <div class="cs-invoice_head cs-type1 cs-mb25">
          <div class="cs-invoice_left">
            <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b class="cs-primary_color">Facturer à :</b> #{{$commadmins->id}}</p>
            <p class="cs-invoice_date cs-primary_color cs-m0">
              <b class="cs-primary_color">Date: </b>{{$commadmins->created_at}}</p>
          </div>
          <div class="cs-invoice_right cs-text_right">
            <div class="cs-logo cs-mb5">
              <img src="{{url('facture/assets/img/samser.png')}}" alt="Logo" width="80" height="80">
            </div>
          </div>
        </div>
        <div class="cs-invoice_head cs-mb10">
          <div class="cs-invoice_left">
            <b class="cs-primary_color">Facturer à :</b>
            <p>
            {{$commadmins->nom_user}} <br>
            {{$commadmins->adresse_user}} <br>{{$commadmins->phone_user}}<br>
            </p>
          </div>
          <div class="cs-invoice_right cs-text_right">
            <b class="cs-primary_color"> société de la livraison : </b>
            <p>
            Samser Tounsi<br>
             +216 75 223 122<br>
              samsertn@gmail.com
            </p>
          </div>
        </div>
        <div class="cs-table cs-style1">
          <div class="cs-round_border">
            <div class="cs-table_responsive">
              <table>
                <thead>
                  <tr>
                    <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">nom produit</th>
                    <th class="cs-width_4 cs-semi_bold cs-primary_color cs-focus_bg">nom de la société de vente</th>
                    <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg cs-text_right">Prix Total</th>
                  </tr>
                </thead>
                <tbody>
                
                  <tr> 
                    <td class="cs-width_3">{{$commadmins->nom_prduit}}</td>
                    <td class="cs-width_4">{{$commadmins->nom_soc}}</td>
         
                    <td class="cs-width_2 cs-text_right">{{$commadmins->prix_total}}</td>
                  </tr>
             
                  
                </tbody>
              </table>
            </div>
            <div class="cs-invoice_footer cs-border_top">
              <div class="cs-left_footer cs-mobile_hide">
              <p class="cs-mb0"><b class="cs-primary_color">Informations de paiement :</b></p>
                
                <p class="cs-m0"></p>
              </div>
              <div class="cs-right_footer">
                <table>
                  <tbody>
                    <tr class="cs-border_left">
                      <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">prix</td>
                      <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">{{$commadmins->prix_total}}</td>
                    </tr>
                    <tr class="cs-border_left">
                      <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Livraison </td>
                      <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">8  TND</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="cs-invoice_footer">
            <div class="cs-left_footer cs-mobile_hide">

           

            {!! QrCode::size(300)->generate("nom client:".$commadmins->nom_user."
                                         \r\n adresse:".$commadmins->adresse_user." 
                                          \r\n tel:".$commadmins->phone_user."
                                          \r\n nom produit:".$commadmins->nom_prduit."
                                          \r\n Prix Total:".$commadmins->prix_total
            ) !!}
          
            </div>
            <div class="cs-right_footer">
              <table>
                <tbody>
                  <tr class="cs-border_none">
                    <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color">Total </td>
                    <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color cs-text_right">{{$commadmins->prix_total + 8}}TND</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="cs-note">
          
          
        </div><!-- .cs-note -->
      </div>
      <div class="cs-invoice_btns cs-hide_print">
        <a href="javascript:window.print()" class="cs-invoice_btn cs-color1">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="392" cy="184" r="24"/></svg>
          <span>Print</span>
        </a>
        <button id="download_btn" class="cs-invoice_btn cs-color3">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Download</title>
          <path d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/></svg>
          <span>Download</span>
        </button>
      </div>
    </div>
  </div>
  <script src="{{url('facture/assets/js/jquery.min.js')}}"></script>
  <script src="{{url('facture/assets/js/jspdf.min.js')}}"></script>
  <script src="{{url('facture/assets/js/html2canvas.min.js')}}"></script>
  <script src="{{url('facture/assets/js/main.js')}}"></script>
</body>

</html>