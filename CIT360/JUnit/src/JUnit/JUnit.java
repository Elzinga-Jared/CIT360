package JUnit;
// This is a program of a grading calculator with tests involved.

public class JUnit {

private int _score = 0;
    
    public JUnit(int val)
    {
        this._score=val;
    }
    
    public String print()
    {
        if(_score >= 93)
            return "A";
        else if(_score >= 85)
            return "B";
        else if(_score >= 77)
            return "C";
        else if(_score >= 70)
            return "D";
        else
            return "F";
    }

    public int getScore() {
        return _score;
    }

    public void setScore(int _score) {
        this._score = _score;
    }
    
    
}
