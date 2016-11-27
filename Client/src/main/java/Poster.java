import com.google.gson.*;

import java.io.*;
import java.net.HttpURLConnection;
import java.net.URL;
import java.net.URLConnection;
import java.util.Arrays;
import java.util.List;
import java.util.Random;
import java.util.concurrent.ThreadLocalRandom;


public class Poster {

    public static void monarchPoster(String Json) throws IOException {


        List<String> supplierNames = Arrays.asList("Mercurio", "Venus", "Tierra", "Marte", "Jupiter", "Saturno");
        Random rn = new Random();
        int answer = rn.nextInt(6);

        String location = supplierNames.get(answer);

        System.out.println(location);

        //System.out.println(Json);
        JsonParser parser = new JsonParser();
        JsonObject o = parser.parse(Json).getAsJsonObject();

        String title = o.getAsJsonArray("matches").get(0).getAsJsonObject().getAsJsonObject("metadata").get("title").toString();
        String artist = o.getAsJsonArray("matches").get(0).getAsJsonObject().getAsJsonObject("metadata").get("artist").toString();

                 title = title.replace("\"", "");
                 artist = artist.replace("\"", "");

        String aenviar = title + " - " + artist;
        System.out.println(aenviar);

        String total = "{\"title\" : \"" + aenviar + "\", \"location\" : \""+location+"\"}";



        System.out.println(total);

        URL url = new URL("http://whites.sytes.net:82/addSong");

        HttpURLConnection connection = (HttpURLConnection) url.openConnection();
        connection.setConnectTimeout(5000);//5 secs
        connection.setReadTimeout(5000);//5 secs

        connection.setRequestMethod("POST");
        connection.setDoOutput(true);
        connection.setRequestProperty("Content-Type", "application/json");

        OutputStreamWriter out = new OutputStreamWriter(connection.getOutputStream());
        out.write(total);
        out.flush();
        out.close();

        int res = connection.getResponseCode();

        System.out.println(res);


        InputStream is = connection.getInputStream();
        BufferedReader br = new BufferedReader(new InputStreamReader(is));
        String line = null;
        while((line = br.readLine() ) != null) {
            System.out.println(line);
        }
        connection.disconnect();




    }
}
