using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Text;
using System.Threading.Tasks;

namespace RagflowAPI
{
    internal class Program
    {
        static async Task Main(string[] args)
        {
            var client = new HttpClient();
            var request = new HttpRequestMessage(HttpMethod.Post, "http://127.0.0.1/api/v1/retrieval");
            request.Headers.Add("Authorization", "Bearer ragflow-hjNzA4ODI4YWM5MTExZWY5YzUyMDI0Mm");
            var content = new StringContent("{\r\n        \"question\": \"some questions\",\r\n        \"dataset_ids\": [\"8a85ab34ad5311ef98b00242ac120003\"],\r\n        \"document_ids\": [\"501e387aadf411ef922e0242ac120003\"]\r\n}", null, "application/json");
            request.Content = content;
            var response = await client.SendAsync(request);
            response.EnsureSuccessStatusCode();
            Console.WriteLine(await response.Content.ReadAsStringAsync());

        }
    }
}
