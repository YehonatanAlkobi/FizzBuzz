using namespace std;
int main {
  for(int i = 1; i <= 200; i++)
  {
    if(i%35 == 0)
      cout << "FizzBuzz";
    else if(i%7 == 0)
      cout << "Buzz";
    else if(i%5 == 0)
      cout << "Fizz";
    else
      cout << i;
  }
}