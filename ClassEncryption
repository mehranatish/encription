package com.example.toterandroid.class_;


import android.annotation.SuppressLint;
import android.util.Base64;

import java.io.BufferedReader;
import java.io.ByteArrayInputStream;
import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.UnsupportedEncodingException;
import java.nio.charset.StandardCharsets;
import java.util.Arrays;
import java.util.zip.GZIPInputStream;
import java.util.zip.GZIPOutputStream;

import static com.example.toterandroid.class_.Globals.famil;
import static com.example.toterandroid.class_.Globals.mail;
import static com.example.toterandroid.class_.Globals.name;
import static com.example.toterandroid.class_.Globals.phon;

public  class ClassEncryption {

/*
  JSONObject jsonObjectenc=new JSONObject();
                JSONObject jsonObject=new JSONObject();
                try {
                    jsonObject.put("jason","سلام");

                    jsonObjectenc.put("jason",encript(jsonObject.toString()));
                } catch (JSONException e) {
                    e.printStackTrace();
                }
                  TextView t=(TextView)findViewById(R.id.textView2);
                t.setText(json_(Url + "index.php",jsonObjectenc));

* */

    // decript(encript("text"))

    private static String compress(String data) throws IOException {
        String s=name+data+famil;
        ByteArrayOutputStream bos = new ByteArrayOutputStream(s.length());
        GZIPOutputStream gzip = new GZIPOutputStream(bos);
        gzip.write(s.getBytes());
        gzip.close();
        byte[] compressed = bos.toByteArray();
        bos.close();

        return Base64.encodeToString(compressed, Base64.DEFAULT);

    }
    private static String decompress(String compressed) throws IOException {
        ByteArrayInputStream bis = new ByteArrayInputStream(Base64.decode(compressed, Base64.DEFAULT));
        GZIPInputStream gis = new GZIPInputStream(bis);
        BufferedReader br = new BufferedReader(new InputStreamReader(gis, "UTF-8"));
        StringBuilder sb = new StringBuilder();
        String line;
        while((line = br.readLine()) != null) {
            sb.append(line);
        }
        br.close();
        gis.close();
        bis.close();

        if(
                sb.toString().startsWith(name)
                        &&
                        sb.toString().endsWith(famil)
        ){
            return sb.toString().substring(name.length(),sb.toString().length()-famil.length());
        }else {
            return null;
        }
    }


    public static  String encript(String s)  {

        char[] c=(
                chZ( mail.toCharArray())
                        +enCode(s)+
                        chZ( phon.toCharArray())
        ).toCharArray();
        String[] ss=new String[c.length];
        int i=0;
        for(char cc:c){
            try {
                ss[i]=compress(chZ((""+cc).toCharArray())) ;
            } catch (IOException e) {
                e.printStackTrace();
            }
            i++;
        }
        StringBuilder s1= new StringBuilder();
        for(String s11:Arrays.toString(ss).split(" ")){
            s1.append(s11);
        }
        try {
            return compress(s1.toString());
        } catch (IOException e) {
            e.printStackTrace();
            return null;
        }
    }
    public static  String decript(String ss)     {
        String s= null;
        try {
            s = decompress(ss);
        } catch (IOException e) {
            e.printStackTrace();
        }
        String[] ary= s.substring(1,s.length()-1).split(",");
        StringBuilder sc= new StringBuilder();
        for(String s1:ary){
            try {
                sc.append( dehegz(decompress( s1)) );
            }catch (Exception ignored){}
        }
        if(
                sc.toString().startsWith(chZ( mail.toCharArray()))
                        &&
                        sc.toString().endsWith(chZ( phon.toCharArray()))
        ){
            return deCode(
                    sc.toString().substring(
                            chZ( mail.toCharArray()).length()
                            ,
                            sc.toString().length()
                                    -
                                    chZ( phon.toCharArray()).length()));
        }else {
            return null;
        }
    }

    private static String dehegz(String s){

        StringBuilder stringbuilder = new StringBuilder();
        try {
            char[] hexData = s.toCharArray();
            for (int count = 0; count < hexData.length - 1; count += 2) {
                int firstDigit = Character.digit(hexData[count], 16);
                int lastDigit = Character.digit(hexData[count + 1], 16);
                int decimal = firstDigit * 16 + lastDigit;
                stringbuilder.append((char)decimal);
            }
        }catch (Exception ignored){}
        return stringbuilder.toString();
    }
    private static String chZ(char[] s) {
        String ss="";
        for (char cc:s)
        {
            ss+=  stringToHex(""+cc);
        }
        return ss;
    }
    private static String enCode(String text) {
        byte[] data = null;
        String base64 = null;
        try {
            data = text.getBytes("UTF-8");
            base64 = Base64.encodeToString(data, Base64.DEFAULT);

        }
        catch (UnsupportedEncodingException e) {
            e.printStackTrace();
        }
        return base64;
    }
    private static String deCode(String base64) {
        byte[] data = null;
        String text = null;
        try {
            data = Base64.decode(base64, Base64.DEFAULT);
            text = new String(data, "UTF-8");}

        catch (UnsupportedEncodingException e) {
            e.printStackTrace();
        }

        return text;
    }
    private static String stringToHex(String s) {

        String binary=stringtobinary(s);
        int decimalValue = 0;
        int length = binary.length() - 1;
        for (int i = 0; i < binary.length(); i++) {
            decimalValue += Integer.parseInt(binary.charAt(i) + "") * Math.pow(2, length);
            length--;
        }
        return decimalToHex(decimalValue);
    }
    private static String stringtobinary(String s) {
        @SuppressLint({"NewApi", "LocalSuppress"})
        byte[] bytes = s.getBytes(StandardCharsets.UTF_8);
        StringBuilder binary = new StringBuilder();
        for (byte b : bytes)
        {
            int val = b;
            for (int i = 0; i < 8; i++)
            {
                binary.append((val & 128) == 0 ? 0 : 1);
                val <<= 1;
            }

        }
        return ""+binary;
    }
    private static String decimalToHex(int decimal){
        String hex = "";
        while (decimal != 0){
            int hexValue = decimal % 16;
            hex = toHexChar(hexValue) + hex;
            decimal = decimal / 16;
        }
        return hex;
    }
    private static char toHexChar(int hexValue) {
        if (hexValue <= 9 && hexValue >= 0)
            return (char)(hexValue + '0');
        else
            return (char)(hexValue - 10 + 'A');
    }
}





