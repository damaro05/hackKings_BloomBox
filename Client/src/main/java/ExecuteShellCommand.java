import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class ExecuteShellCommand {





    public static String shazamSender() throws IOException {

        String s = null;
        String response = "";

        Runtime runtime = Runtime.getRuntime();

        Process process = Runtime.getRuntime().exec(new String[] {"curl", "-X", "POST", "-H", "X-Shazam-Api-Key: 03789B8E-A8CE-4229-A880-7FDE4C4FAEFC", "-H", "Content-Type: application/octet-stream", "--data-binary", "@RecordAudio.wav", "http://beta.amp.shazam.com/partner/recognise"});

        BufferedReader stdInput = new BufferedReader(new
                InputStreamReader(process.getInputStream()));

        // read the output from the command
        while ((s = stdInput.readLine()) != null) {
            //System.out.println(s);
            response = response + s;
        }
        Poster.monarchPoster(response);
        return response;
    }



}